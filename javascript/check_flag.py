#!/bin/python3

from hashlib import md5
from sys import argv

flag_hashes = [
    '06571cb064aafd9a1fa77bc5ae1613d3',
    'e138ff216e236e46f3e3819779aeb667',
    '439d68b3f03a1113fd52aad3ff201783',
    '7beaeec31816c99d2920d088ced069fe',
]

def usage():
    print("""Description:
    This program will verify if the flag you found is the correct one
    Don't forget the single quotes around the flag ( ' ) otherwise characters
    like ( ! ) or ( $ ) might change your argument in bash
Usage:
    ./verify 'js{??????????????}'

if you want tips, try running the program with -tip
""")

def tip():
    print("get good lol")

if len(argv) != 2 or "-h" in argv:
    usage()
    exit(0)

if "-tip" in argv:
    tip()
    exit(0)

h = md5(argv[1].encode('utf-8')).hexdigest()

if h in flag_hashes:
    print("Success! You validated flag nb %d" % (flag_hashes.index(h) + 1))
else:
    print("Failed! try again")
