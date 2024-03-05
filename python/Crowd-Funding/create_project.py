import validation
import add_project
import datetime

def val_title(title):
    project_title = input("Enter Your Project Title✍️      : ").strip()
    if project_title.isalpha():
        if validation.val_title(project_title):
            return project_title
        else:
            return val_title(title)
    else:
        return val_title(title)

def val_target(details):
    project_details = input("Your Total Target✍️      : ")
    if project_details.isnumeric():
        project_details = str(project_details)
        return project_details
    else:
        print("Invalid Input✍️      ")
        return val_target(details)

def val_sdate(date):
    sdate = input(f"Enter Project {date} Date As (YYYY-MM-DD)✍️      :  ")
    try:
        datetime.datetime.strptime(sdate, '%Y-%m-%d')
        return sdate
    except ValueError:
        print("Incorrect Data Format!🚫 , Should Be YYYY-MM-DD")
        return val_sdate(date)

def val_edate(start):
    edate = input(f"Enter Project end Date✍️      : ")
    try:
        datetime.datetime.strptime(edate, '%Y-%m-%d')
        if start < edate:
            return edate
        else:
            print("end Date Can Not Be Before start Date 🚫 ")
            return val_edate(start)
    except ValueError:
        print("Incorrect Data Format, Should Be YYYY-MM-DD!🚫")
        return val_edate(start)

def create_proj(user_mail):
    user_email = user_mail
    title = val_title("title")
    details = input("Project Details : ")
    target = val_target("target")
    start = val_sdate("start")
    end = val_edate(start)
    info_of_project = [user_email, title, details, target, start, end]
    add_project.add_proj(info_of_project)
    return
