import os
import datetime

def edit_edate(user_mail, title):
    proj_title = title
    email = user_mail
    flag = 0
    with open("projects.txt") as readFile:
        projects = readFile.readlines()
        for project in projects:
            project = project.strip("\n")
            project_info = project.split("-")
            if email == project_info[0]:
                if proj_title == project_info[1]:
                    while True:
                        edate = input("Enter Your New end Date ✍️      : ")
                        try:
                            datetime.datetime.strptime(edate, '%Y-%m-%d')
                            if project_info[4] < edate:
                                break
                            else:
                                print("end date can not be before start date ☹️ ")
                        except ValueError:
                            print("Incorrect data format, should be YYYY-MM-DD 🛑 ")
                    project_info[5] = edate
                    info = "-".join(project_info)
                    with open("temp.txt", "a") as edit_file:
                        data = info.strip("\n")
                        data = f"{data}\n"
                        edit_file.writelines(data)
                        print(f"Your New Date [{edate}] is Successfully Added 😃")
                        flag = 1
                else:
                    project_info = "-".join(project_info)
                    with open("temp.txt", "a") as notedit_file:
                        data = project_info.strip("\n")
                        data = f"{data}\n"
                        notedit_file.writelines(data)

            else:
                project_info = "-".join(project_info)
                with open("temp.txt", "a") as notedit_file:
                    data = project_info.strip("\n")
                    data = f"{data}\n"
                    notedit_file.writelines(data)

    if flag == 0:
        print(f"We can not found a title with this name [{proj_title}] 🙂")
    os.remove("projects.txt")
    os.rename("temp.txt", "projects.txt")
