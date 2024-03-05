import edit_title
import edit_desc
import edit_target
import edit_start_date
import edit_end_date

def checkingval_title():
    while True:
        val_title = input("Please Enter the Title of project ✍️      : ").strip()
        if val_title.isalnum():
            val_title = str(val_title)
            return val_title
        else:
            print("Invalid Type of title")
            checkingval_title()

def edit_proj(user_email):
    while True:
        print("Please, Enter Your Choice Carefully As You Asked For : ")
        print("1️⃣  Edit Title")
        print("2️⃣  Edit Description")
        print("3️⃣  Edit Total Target")
        print("4️⃣  Edit start Date")
        print("5️⃣  Edit end Date")
        print("6️⃣  Back")
        email = user_email
        choise = input("Your choise is : ")
        print("")
        if choise.isnumeric():
            choise = int(choise)
            if choise == 1:
                val_title = checkingval_title()
                edit_title.edit_title(email, val_title)
            elif choise == 2:
                val_title = checkingval_title()
                edit_desc.edit_description(email, val_title)
            elif choise == 3:
                val_title = checkingval_title()
                edit_target.edit_target(email, val_title)
            elif choise == 4:
                val_title = checkingval_title()
                edit_start_date.edit_sdate(email, val_title)
            elif choise == 5:
                val_title = checkingval_title()
                edit_end_date.edit_edate(email, val_title)
            elif choise == 6:
                return
            else:
                print("Invalid Choise, Try again! 🙂")
        else:
            print("Invalid Input 🙂 ")
    return
