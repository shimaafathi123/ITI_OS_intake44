import os

def del_proj(user_mail, title):
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
                    info = "-".join(project_info)
                    with open("temp.txt", "a") as edit_file:
                        data = info.strip("\n")
                        data = f"{data}\n"
                        if not (email == project_info[0] and proj_title == project_info[1]):
                            edit_file.writelines(data)
                            flag = 0
                        else:
                            print("Great, your project has been deleted Successfully 💢! ")
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
        print(f"We Can Not Found a Title With This Name [{proj_title}] 😐")
    os.remove("projects.txt")
    os.rename("temp.txt", "projects.txt")

