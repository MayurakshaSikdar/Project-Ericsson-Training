import pymysql
from textblob import TextBlob
conn=pymysql.connect(host="localhost", user="root", password="", db="webrater")
myCursor=conn.cursor()
myCursor.execute("SELECT cid FROM `comments_table` WHERE rating = 0.00")
result = myCursor.fetchall()
for x in result:
    myCursor.execute("SELECT comment FROM `comments_table` WHERE cid=(%s)",x)
    comment = str(myCursor.fetchone())
    positive=0
    negative=0
    neutral=0
    polarity=0
    rating=0
    a=TextBlob(comment)
    polarity+=a.sentiment.polarity
    if(a.sentiment.polarity==0):
        neutral+=1
    elif(a.sentiment.polarity<0):
        negative+=1
    elif(a.sentiment.polarity>0):
        positive+=1
    if(polarity>=-0.2 and polarity<=0.2):
        rating=3
    elif(polarity>=-0.6 and polarity<-0.2):
        rating=2
    elif(polarity>=-1.0 and polarity<-0.6):
        rating=1
    elif(polarity>0.2 and polarity<=0.6):
        rating=4
    elif(polarity>0.6 and polarity<=1.0):
        rating=5
    #if(polarity>=0):
    #   genuine='genuine'
    #else:
    #    genuine='notgenuine'
    #print(comment)
    myCursor.execute("UPDATE `comments_table` SET rating = (%s) WHERE cid = (%s)",(rating,x))
conn.commit()
conn.close()