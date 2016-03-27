#!/usr/bin/env python  #-S
import csv
import codecs
# sys.stdout = codecs.getwriter('utf8')(sys.stdout)
# sys.stderr = codecs.getwriter('utf8')(sys.stderr)
# import mysql.connector

# try:

# 	cnx = mysql.connector.connect(user='root', password='maiskrete35',
#                               host='localhost',
#                               database='cmeyer')

# except mysql.connector.Error as err:
# 	if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
# 		print("Something is wrong with your user name or password")
# 	elif err.errno == errorcode.ER_BAD_DB_ERROR:
# 		print("Database does not exist")
# 	else:
# 		print(err)
# else:
#   	cnx.close()

# cnx.close()

insertIntoStr = r'INSERT INTO `user_info` (`courriel`) '
#insertIntoStr = r'INSERT INTO `user_info` (`nom`, `prenom`, `courriel`, `company`) '
#print (insertIntoStr)

# Open .sql file for writing
with open('CMCO_clients.sql', 'w') as sqlFile:
    sqlFile.write(insertIntoStr)
    sqlFile.write('\nVALUES\n')

    # Open .csv file for reading
    #with io.open('CMCO_newsletter_DB.csv', 'rb', encoding='utf8') as csvFile:
    with open('CMCO_newsletter_DB.csv', 'rb') as csvFile:
        reader = csv.reader(csvFile)
        # Skip the .csv header
        next(reader, None)

        # Read each row from .csv and write into .sql
        for row in reader:
            formattedRow = "('%s'),\n" % (row[2])
            #formattedRow = "('%s', '%s', '%s', '%s'),\n" % (row[0], row[1], row[2], row[5])
            print formattedRow
            sqlFile.write(formattedRow)
