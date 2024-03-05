import validation
import login_menu

def login():
    Email = input("Enter Your Email ✍️      :").strip()
    Password = input("Enter Your Password ✍️     :").strip()
    if validation.val_login(Email, Password):
        print("Loging Successfully! 🥳")
        login_menu.login_menu(Email)
        return True
    print("Invalid Username or Email , Please Try Again 🙂")
    return login()