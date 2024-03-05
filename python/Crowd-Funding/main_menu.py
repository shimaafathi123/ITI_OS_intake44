import registeration
import login

print(">>>>>>>>>>>>>>🌹Welcome To Crowd-Funding Console Application🌹>>>>>>>>>>>>>>")

def mainFun():
    while True:
        print("Choice From List Below : ")
        print("1️⃣  Registration")
        print("2️⃣  Login")
        print("3️⃣  Exit")
        choice = input("Enter Your Choice: ").strip()
        if choice.isnumeric():
            choice = int(choice)
            if choice == 1:
                print("You are now in Registration Mode 🆕 ")
                registeration.register()
            elif choice == 2:
                print("You are now in Login Mode 👨‍💻")
                login.login()
            elif choice == 3:
                print("Goodbye 🙋‍♀️! ")
                exit()
            else:
                print("Invalid Input 🙂")
        else:
            print("You entered invalid input 🙂")

mainFun()
