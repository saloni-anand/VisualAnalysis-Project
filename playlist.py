import billboard
import mysql.connector
import random

cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='musicrec')
cursor = cnx.cursor()

allbb=billboard.charts()

def ins(val):
    sql = """INSERT INTO playlist (playlist) VALUES (%s)"""
    values= tuple(val)
    cursor.execute(sql,values)
    cnx.commit()

for i in range(len(allbb)):
    ins([str(allbb[i])])