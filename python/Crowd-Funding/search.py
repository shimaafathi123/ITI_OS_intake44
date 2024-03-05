def search_proj(user_mail, title):
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
                    print(f"User Email: {project_info[0]}")
                    print(f"Project Title: {project_info[1]}")
                    print(f"Description: {project_info[2]}")
                    print(f"Total target: {project_info[3]}")
                    print(f"start Date: {project_info[4]}")
                    print(f"end Date: {project_info[5]}")
                    flag = 1

    if flag == 0:
        print(f"We Cann't Found A Title With This Name [{proj_title}] 🙂")
