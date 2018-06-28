<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\User;
use app\models\Worklist;


class TodoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }


    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionGetworklist()
    {
        $request = Yii::$app->request;
        $start = $request->get('start');
        $end = $request->get('end');

        $db_events = Worklist::find()->where('date >= :start and date <= :end', [':start' => $start, ":end" => $end])->andWhere(['user_id'=>Yii::$app->user->id, 'status'=>'1'])->all();
        $events = [];

        foreach ($db_events as $key => $row) {

            $events[$key]['id'] = $row->id;
            $events[$key]['title'] = $row->title;
            $events[$key]['start'] = $row->date . " " . $row->start_time;
            $events[$key]['end'] = $row->date . " " . $row->end_time;
            $events[$key]['date'] = $row->date;
            $events[$key]['start_time'] = $row->start_time;
            $events[$key]['end_time'] = $row->end_time;
            $events[$key]['className'] = 'event_' . $row->work_status;

        }


        echo json_encode($events);
    }

    public function actionGetaddform()
    {
        $html = $this->renderPartial('add_form', [], true);
        echo json_encode(['html' => $html]);
    }

    public function actionAddtoworklist()
    {
        $data_msg = [];
        $model = new Worklist(['scenario' => 'create']);
        $model->attributes = $_POST['Worklist'];
        if ($model->validate()) {
            $model->start_time = $model->start_time . ":00";
            $model->end_time = $model->end_time . ":00";
            $model->user_id = Yii::$app->user->id;
            $model->work_status = "pending";
            $model->status = "1";
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save(false);
            $data_msg['type'] = 'success';
            $data_msg['message'] = "Work-list successfully updated.";
        } else {
            $errors = [];
            foreach ($model->getErrors() as $key => $val) {
                $errors[$key] = $val[0];
            }

            $data_msg['type'] = 'warning';
            $data_msg['errors'] = $errors;
        }
        echo json_encode($data_msg);
    }

    public function actionGeteditform()
    {
        $data_msg = [];
        $request = Yii::$app->request;
        $id = $request->get('id');

        $model = Worklist::findOne($id);

        if (!empty($model)) {
            $html = $this->renderPartial('edit_form', ['model'=>$model], true);
            $data_msg['html']=$html;
            $data_msg['type']="success";
        } else {
            $data_msg['type'] = 'warning';
            $data_msg['message'] = "Data not found";
        }

        echo json_encode($data_msg);
    }

    public function actionChangeworkstatus(){
        $data_msg = [];
        $request = Yii::$app->request;
        $id = $request->get('id');

        $model = Worklist::findOne($id);

        if (!empty($model)) {
            $model->work_status='completed';
            $model->save(false);
            $data_msg['html']='<span class="event_completed">Completed</span>';
            $data_msg['type']="success";
        } else {
            $data_msg['type'] = 'warning';
            $data_msg['message'] = "Data not found";
        }

        echo json_encode($data_msg);
    }
}
