import pandas as pd
import csv
from datetime import datetime

#Read new Mega_Millions csv
df = pd.read_csv('p-a-t-h/csv/Lottery_Mega_Millions_Winning_Numbers__Beginning_2002.csv',
            index_col='Draw Date',
            parse_dates=['Draw Date'],
            header=0,
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.sort_values(["Draw Date"], axis=0, ascending=[False], inplace=True)
df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df.to_csv('p-a-t-h/csv/megamillions.csv', mode='w')


#Adjusted
df = pd.read_csv('p-a-t-h/csv/megamillions.csv')

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df['Multiplier'] = df['Multiplier'].astype('Int64')
df = df[pd.to_datetime(df['Draw Date']) > '2017-10-31']
df.to_csv('p-a-t-h/csv/megamillions-adj.csv', mode='w', index=None)


#Mega_Millions Clean
df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier']
            )

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df.drop('Mega Ball', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions_clean.csv', header=None, index=None)

df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df['Winning Numbers'] = df['Winning Numbers'].astype(str) + ' ' + df['Mega Ball'].astype(str)
df.drop('Mega Ball', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions_days_clean.csv', header=None, index=None)


#Tuesday
df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv')
df = df[pd.to_datetime(df['Draw Date']).dt.weekday == 1]
df.to_csv('p-a-t-h/csv/megamillions_tuesday.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/megamillions_tuesday.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df['Winning Numbers'] = df['Winning Numbers'].astype(str) + ' ' + df['Mega Ball'].astype(str)
df.drop('Mega Ball', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions_tuesday_clean.csv', header=None, index=None)


#Friday
df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv')
df = df[pd.to_datetime(df['Draw Date']).dt.weekday == 4]
df.to_csv('p-a-t-h/csv/megamillions_friday.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/megamillions_friday.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df['Winning Numbers'] = df['Winning Numbers'].astype(str) + ' ' + df['Mega Ball'].astype(str)
df.drop('Mega Ball', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions_friday_clean.csv', header=None, index=None)


#Main Ball Numbers Only
df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])

df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df.drop('Mega Ball', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions-adj-main.csv', header=None, index=None)


#Mega Ball Numbers Only
df = pd.read_csv('p-a-t-h/csv/megamillions-adj.csv',
            index_col=False,
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Mega Ball', 'Multiplier'])
            
df['Mega Ball'] = df['Mega Ball'].apply('{:02d}'.format)
df.drop('Winning Numbers', inplace=True, axis=1)
df.to_csv('p-a-t-h/csv/megamillions-adj-mega.csv', header=None, index=None)