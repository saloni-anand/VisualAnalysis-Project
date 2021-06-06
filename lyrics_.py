#only for testing!!!

import billboard
import lyricsgenius
import paralleldots
import csv
import pprint
import json
import matplotlib.pyplot as plt

def display_graph(D,name):
    plt.bar(range(len(D)), D.values(), align='center')
    plt.xticks(range(len(D)), list(D.keys()))
    plt.savefig(str(str(name)+'.png'))
    plt.show()

pp = pprint.PrettyPrinter(indent=4)

api_key = "MCNutaaOk91gnlFdxUMA7WlFR4pAq4aqzH16eIdt4ls"
paralleldots.set_api_key( api_key )

genius = lyricsgenius.Genius("pptfhHkZY3lHqs5QDiqYkYlp1Hh2Y2TqVslna3zBlMlbHlJ_P5b7T2MOc3wPS3Bn")

id="ab0bb00bdf654551b0e4d0ccaa44f338"
secret="d2aa7c2b15064f0e8322f0e9b2517798"
genius = lyricsgenius.Genius("c1MKe6DhKC5psfH49i4rkJiV6Ub-G-T6YP131rxsXV--IKMv_HjKXVNQspTB6slG")

cid =id
secret = secret

val=[]

name='hot-100'
chart = billboard.ChartData(name)

dict_={}

for i in range(80):
    song = genius.search_song(chart[i].title,chart[i].artist)
    
    if(type(song=='NoneType')):
        lyrics="Not found"

    else:
        lyrics=str(song.lyrics)

    dict_[str(chart[i].title)]=paralleldots.emotion(lyrics)['emotion']
    display_graph(dict_,chart[i].title)

'''
with open('output.csv', 'w') as output:
    writer = csv.writer(output)
    for key, value in dict_.items():
        writer.writerow([key, value])
'''
