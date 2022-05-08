import os
import _osx_support
from re import X
import sys
from tkinter import N
import tkinter
from traceback import print_tb
from typing import Any
from xml.dom.minidom import Notation
import python
import datetime

def recur_fibo(n):
    if n <= 1:
        return n
    else:
        return(recur_fibo(n-1) + recur_fibo(n-2))
    
    nterms = 10

# check if the number of terms is valid
    if nterms <= 0:
        print("Please enter a positive integer")
    else:
        print("Fibonacci sequence:")
        for i in range(nterms):
            print(recur_fibo(i))

def date():
    x_date = datetime.datetime.now()
    print(x_date)

def main_date_recur_name_jj_godjira_godzilla():
    print(" ***************************************** ")
    print(" Bonjour \n Je vous souhaite la bienvenue. ")
    print(" ***************************************** ")
    c = print("""
    [ 1 ] = main
    [ 2 ] = exit
    [ 3 ] = date

    Please enter a number beetwin 1 and 3.
    ## >
    """)
    if c == '1':
        main()
    if c == '2':
        exit()
    if c == '3':
        x_date = datetime.datetime.now()
        print(x_date)


def main(a):
    if a <= 1:
        main()

    if a == 1:
        a_print = print("Il y a du trafic sur NARFLIX. \n What else.")
        def ref(b):
            if b >= 1:
                return a_print
            if b <= 0:
                b_print = print("ERROR \n Il n'y a pas de trafic sur NARFLIX. \n Veuiller verrifier.")
            if b == recur_fibo():
                return recur_fibo()

    else :
        print("|/| ERROR |/| NO TRAFIC |/|")
        x_date = datetime.datetime.now()
        print(x_date)


def __name__ (__main__):
    main()