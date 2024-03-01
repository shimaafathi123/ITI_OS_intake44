#Implement a function to check if a number is prime or not

def primeOrNot(num):
    flag = 0
    for i in range(2, num):  
        if num % i == 0:
            print("The number is not a prime")
            flag = 1
            break
    if flag == 0:
        print("It is a prime")

primeOrNot(8)
