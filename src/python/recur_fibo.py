import os
import _osx_support
import sys
from tkinter import N
from traceback import print_tb
from xml.dom.minidom import Notation
import python
import datetime

# Python program to display the Fibonacci sequence

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