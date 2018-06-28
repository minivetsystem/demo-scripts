<?php

function get_timeago( $ptime )
{
    $estimate_time = (time() - $ptime) + (60 * 60 * 3.5);

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $condition = array(
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' );
        }
    }
}

function generate_country_html($_attributes, $_selected='IN')
{
    $_attributesText = $_countryHtml = $_selectedText = '';
    
    $_countries = array(
        "IN"=>'India',
		"GB"=>'United Kingdom',
        "ZA"=>'South Africa',
        "EU"=>'Europe',
        "MX"=>'Mexico',
        "FR"=>'France',
        "NP"=>'Nepal',
        "SG"=>'Singapore',
        "US"=>'United States',
        "LK"=>'Sri Lanka'
    );
    
    if(isset($_attributes) && is_array($_attributes)){
        foreach($_attributes AS $_attribute => $value){
            $_attributesText .= "{$_attribute}='$value' ";
        }
    } else {
        $_attributesText = $_attributes;
    }
    
    $_countryHtml = '<select ' . $_attributesText . '>'; 

    foreach($_countries as $ccode => $country){
        if ($ccode == $_selected){
            $_selectedText = 'selected="selected"';
        } else {
            $_selectedText = '';
        }
        $_countryHtml .= '<option value="'.$ccode.'" '.$_selectedText.'>'.$country.'</option>';
    }
    $_countryHtml .= '</select>';

    return $_countryHtml;
}

function get_country_name($_code)
{
    $_countries = array(
        "IN"=>'India',
		"GB"=>'United Kingdom',
        "ZA"=>'South Africa',
        "EU"=>'Europe',
        "MX"=>'Mexico',
        "FR"=>'France',
        "NP"=>'Nepal',
        "SG"=>'Singapore',
        "US"=>'United States',
        "LK"=>'Sri Lanka'
    );
    
    if(array_key_exists($_code, $_countries)){
        return $_countries[$_code];
    }
}

function generate_years_html($_attributes, $_selected, $_present=FALSE)
{
    if(!isset($_selected) && empty($_selected)){
        $_selected = date('Y');
    }
    
    $_attributesText = $_yearHtml = $_selectedText = '';
    
    if(isset($_attributes) && is_array($_attributes)){
        foreach($_attributes AS $_attribute => $value){
            $_attributesText .= "{$_attribute}='$value' ";
        }
    } else {
        $_attributesText = $_attributes;
    }
    
    $_yearKeys = $_yearVals = range('2000', date('Y'));
    $years = array_combine($_yearKeys, $_yearVals);
    
    if($_present){
        $years['present'] = 'Present';
        unset($years[date('Y')]);
    }
    
    $_yearHtml = '<select ' . $_attributesText . '>'; 

    foreach($years as $key => $val){
        if ($key == $_selected){
            $_selectedText = 'selected="selected"';
        } else {
            $_selectedText = '';
        }
        $_yearHtml .= '<option value="'.$key.'" '.$_selectedText.'>'.$val.'</option>';
    }
    $_yearHtml .= '</select>';

    return $_yearHtml;
}

function generate_skill_types_html($_attributes, $_selected)
{
    $_CI = & get_instance();
    
    $_attributesText = $_skillTypesHtml = $_selectedText = '';
    
    $_query = $_CI->db->get_where('skill_types', array('skill_type_enabled' => '1'));
    $_skillTypes = $_query->result();
    
    if(isset($_attributes) && is_array($_attributes)){
        foreach($_attributes AS $_attribute => $value){
            $_attributesText .= "{$_attribute}='$value' ";
        }
    } else {
        $_attributesText = $_attributes;
    }
    
    $_skillTypesHtml = '<select ' . $_attributesText . '>'; 

    foreach($_skillTypes AS $_skillType){
        if ($_skillType->skill_type_id == $_selected){
            $_selectedText = 'selected="selected"';
        } else {
            $_selectedText = '';
        }
        $_skillTypesHtml .= '<option value="'.$_skillType->skill_type_id.'" '.$_selectedText.'>'.$_skillType->skill_type_name.'</option>';
    }
    $_skillTypesHtml .= '</select>';

    return $_skillTypesHtml;
}