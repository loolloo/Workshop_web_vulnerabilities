#!/bin/python3

from hashlib import md5
from sys import argv

flag_hashes = [
    '756d01d9c1a0068b57f725af35d7042d',
    'd4e51ebbe87606197746a5e08ea2dea2',
    '2b903ff0dd852003a175a3a9a6e4d53f',
]

def usage():
    print("""Description:
    This program will verify if the flag you found is the correct one
    Don't forget the single quotes around the flag ( ' ) otherwise characters
    like ( ! ) or ( $ ) might change your argument in bash
Usage:
    ./verify 'html{??????????????}'

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
