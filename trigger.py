import wget
import os

urls = ['https://data.ny.gov/api/views/5xaw-6ayf/rows.csv?accessType=DOWNLOAD']

path = 'p-a-t-h/csv/Lottery_Mega_Millions_Winning_Numbers__Beginning_2002.csv'

for url in urls:
    filename = path
    if os.path.exists(filename):
        os.remove(filename)
    wget.download(url, out=filename)