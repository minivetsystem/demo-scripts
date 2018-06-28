import sqlite3

def get_data():
	sqlite_file = 'db.sqlite3'
	conn = sqlite3.connect(sqlite_file)
	c = conn.cursor()
	table_name = 'auth_user'
	c.execute('SELECT * FROM {tn} '.\
	    format(tn=table_name))
	all_rows = c.fetchall()
	#print(all_rows)
	conn.close()
	return all_rows
