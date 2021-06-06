import spotipy
import mysql.connector
import billboard
from spotipy.oauth2 import SpotifyClientCredentials
import lyricsgenius
import pprint
import paralleldots
import json

pp = pprint.PrettyPrinter(indent=4)
genius = lyricsgenius.Genius("8LyZKL7JgmdnRI5MGFffG_X2TqM-tTna0LcjX9kEZQDwCsNhrv6tU_hje-4sbUlF")

cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='musicrec')
cursor = cnx.cursor()

def ins_song(val):
    sql = """INSERT INTO music (name,link,artist,list) VALUES (%s,%s,%s,%s)"""
    values= tuple(val)
    cursor.execute(sql, values)
    cnx.commit()

def insertemo(val):
    sql = """INSERT INTO emotions (name,emotions) VALUES (%s,%s)"""
    values= tuple(val)
    cursor.execute(sql,values)
    cnx.commit()

id="9838ff1273764a5abc34440b4d77475e"
secret="e5c29eae99294ce2b6f0842fd0596deb"
genius = lyricsgenius.Genius("8LyZKL7JgmdnRI5MGFffG_X2TqM-tTna0LcjX9kEZQDwCsNhrv6tU_hje-4sbUlF")

cid =id
secret = secret

client_credentials_manager = SpotifyClientCredentials(client_id=cid, client_secret=secret) 
spotify = spotipy.Spotify(client_credentials_manager=client_credentials_manager)


def preview_link(track_name,name):
    val = []
    track=spotify.search(track_name, limit=1, offset=0, type='track', market=None)
    items=track['tracks']['items']
    if(items == []):
        return val
    artist=track['tracks']['items'][0]['artists'][0]['name']
    link=items[0]['preview_url']
    #lyrics = genius.search_song(track_name, artist)
    if(str(link)!='None'):
        val.append([str(track_name),str(link),str(artist),str("billboard-200")])   
    return val

def emotionsfunc(song_name, artist_name):
    api_key = "MCNutaaOk91gnlFdxUMA7WlFR4pAq4aqzH16eIdt4ls" 
    paralleldots.set_api_key( api_key )
    song = genius.search_song(chart[i].title,chart[i].artist)
    lyrics=str(song.lyrics)
    emo=paralleldots.emotion(lyrics)['emotion']
    val = [song_name, json.dumps(emo)]
    return val

all_chart=list(billboard.charts())
out=[]

for i in range(0,199):
    name='billboard-200'
    chart = billboard.ChartData(name)
    #print(chart[i].title,chart[i].artist)
    random = preview_link(chart[i].title,chart[i].artist)
    if(random == []):
        continue 
    try:
        ins_song(random[0])
    except:
        continue
    
    print(random)
    randomemotions = emotionsfunc(chart[i].title,chart[i].artist)
    try:
        insertemo(randomemotions)
    except:
        continue

    print(randomemotions)
    


