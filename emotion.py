#only for testing!!

from songs import pass_to_file
import paralleldots
import matplotlib.pylab as plt
import pprint

pp = pprint.PrettyPrinter(indent=4)

api_key = "1mCsPTrNvF1Ddvgd6jCiQSrBpWJIhlwp4Gvv8qsQOgM"
paralleldots.set_api_key( api_key )
_lyrics_=pass_to_file()

def emotion_(_lyrics_):
    D=paralleldots.emotion( _lyrics_ )['emotion']
    plt.bar(range(len(D)), D.values(), align='center')
    plt.xticks(range(len(D)), list(D.keys()))
    plt.show()
    plt.savefig('hi.png')

emotion_(_lyrics_[0])
