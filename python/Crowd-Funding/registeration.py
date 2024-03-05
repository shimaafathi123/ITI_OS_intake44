import insert_new
import validation
import re

regex = r'\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b'

def name_val(varname):
    user_input = input(f"Enter Your {varname} : ✍️     ").strip()
    if user_input.isalpha() and len(user_input) >= 2:
        return user_input
    else:
        print("Name should have at least two letters. Please try again.🙂   ")
        return name_val(varname)

def email_val(Email):
    Email = input("Enter Your Mail ✍️     : ").strip()
    if re.fullmatch(regex, Email):
        if validation.val_mail(Email):
            return Email
        else:
            return email_val(Email)
    else:
        print("Invalid Email Type , Please Try Again 🙂")
        return email_val(Email)

def val_pass(password):
    Password = input(f"Enter your Password ✍️     : ").strip()

    special_chars = ['$', '@', '#', '_', '-', '!', '%', '&']
    val = True

    if len(Password) < 6:
        print('Length Should Be At Least 6 🛑')
        val = False

    if len(Password) > 20:
        print('Length Should Be Not Be Greater Than 8 🛑')
        val = False

    if not any(char.isdigit() for char in Password):
        print('Password Should Have At Least One Numeral 🛑')
        val = False

    if not any(char.isupper() for char in Password):
        print('Password Should Have At Least One Uppercase Letter 🛑')
        val = False
    if not any(char.islower() for char in Password):
        print('Password Should Have At Least One Lowercase Letter 🛑')
        val = False

    if not any(char in special_chars for char in Password):
        print('Password Should Have At Least One Of The Symbols [$@#_-!%&] 🛑')
        val = False
    if val:
        return Password
    else:
        return val_pass(Password)

def val_confirm_pass(password):
    confirm_pass = input("Confirm Your Password : ")

    if password == confirm_pass:
        return confirm_pass
    else:
        print("Not Matched Password , Please Try Again 🙂")
        return val_confirm_pass(password)

def val_phone(phoneNum):
    number = input("Please Enter Your Phone Number : ")
    if len(number) != 11:
        print("Please Enter a Valid 11-digit Phone Number 🙂")
        return val_phone(phoneNum)
    else:
        if number.startswith(('010', '011', '012', '015')):
            return number
        else:
            print("Invalid Number in Egypt, Please Enter A Valid Number 🙂")
            return val_phone(phoneNum)

def register():
    fname = name_val("fname")
    lname = name_val("lname")
    Email = email_val("Email")
    password = val_pass("password")
    confirm_pass = val_confirm_pass(password)
    phoneNum = val_phone("phoneNum")
    user_information = [fname, lname, Email, password, confirm_pass,phoneNum]
    insert_new.insert(user_information)
    return
