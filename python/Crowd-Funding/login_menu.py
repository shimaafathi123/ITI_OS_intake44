import create_project
import view_project
import edit_menu
import del_project
import search

def login_menu(user_email):
    while True:
        print("Enter Your Choice Carefully As You Asked For : ")
        print("1️⃣  Create a Project")
        print("2️⃣  View All Projects")
        print("3️⃣  Edit Your Own Projects")
        print("4️⃣  Delete Your Own Project")
        print("5️⃣  Search For a Project")
        print("6️⃣  Back")
        print("7️⃣  Exit")
        log_user_mail = user_email
        choise = input("Your Choise Is : ")
        if choise.isnumeric():
            choise = int(choise)
            if choise == 1:
                create_project.create_proj(log_user_mail)
            elif choise == 2:
                view_project.view_proj(log_user_mail)
            elif choise == 3:
                edit_menu.edit_proj(log_user_mail)
            elif choise == 4:
                title = edit_menu.checkingval_title()
                del_project.del_proj(log_user_mail, title)
            elif choise == 5:
                title = edit_menu.checkingval_title()
                search.search_proj(log_user_mail, title)
            elif choise == 6:
                return
            elif choise == 7:
                print("GoodBye 🙋! ")
                exit()
            else:
                print("Invalid Choise, Try Again 🙂")
        else:
            print("Invalid Input 🙂")
