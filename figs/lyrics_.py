#only for testing!!!

import billboard
import lyricsgenius
import paralleldots
import csv
import pprint
import json
import matplotlib.pyplot as plt

def display_graph(D,numm):
    plt.bar(range(len(D)), D.values(), align='center')
    plt.xticks(range(len(D)), list(D.keys()))
    fname="file.png"
    plt.savefig(fname)

pp = pprint.PrettyPrinter(indent=4)

api_key = "MCNutaaOk91gnlFdxUMA7WlFR4pAq4aqzH16eIdt4ls" 
paralleldots.set_api_key( api_key )

genius = lyricsgenius.Genius("8LyZKL7JgmdnRI5MGFffG_X2TqM-tTna0LcjX9kEZQDwCsNhrv6tU_hje-4sbUlF")

id="ab0bb00bdf654551b0e4d0ccaa44f338"
secret="d2aa7c2b15064f0e8322f0e9b2517798"

cid =id
secret = secret

val=[]

name='Billboard-200'
chart = billboard.ChartData(name)

dict_={}

for i in range(199):
    print("\n_________________________________________________________________\n\n\n")
    song = genius.search_song(chart[i].title,chart[i].artist)
    print(chart[i].title)
    lyrics=str(song.lyrics)
    print(lyrics)
    emo=paralleldots.emotion(lyrics)['emotion']
    print("\n__________\n")
    print(emo)
    dict_[str(chart[i].title)]=emo
    display_graph(emo,i)
    #display_graph(dict_,chart[i].title)

'''
with open('output.csv', 'w') as output:
    writer = csv.writer(output)
    for key, value in dict_.items():
        writer.writerow([key, value])
'''