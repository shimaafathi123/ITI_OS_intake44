def val_login(email, password):
    with open("user_data.txt") as readFile:
        users = readFile.readlines()
        for user in users:
            user = user.strip("\n")
            user_info = user.split("-")
            if user_info[2] == email and user_info[3] == password:
                return True
    return False

def val_mail(email):
    with open("user_data.txt") as readFile:
        users = readFile.readlines()
        for user in users:
            user = user.strip("\n")
            user_info = user.split("-")
            if user_info == ['']:
                break
            elif user_info[2] == email:
                print("The Email Already Exist , Please Enter Another Email 😶")
                return False
    return True

def val_title(title):
    with open("projects.txt") as readFile:
        projects = readFile.readlines()
        for project in projects:
            project = project.strip("\n")
            project_info = project.split("-")
            if project_info == ['']:
                break
            elif project_info[1] == title:
                print("The Title Already Exist , Please Enter Another Title 😶")
                return False
    return True

