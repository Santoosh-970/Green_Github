
students={
    "Aayush":23,
    "sita":26,
    "gita":45,
    "pinkuu":99,
}
def calculate_average(marks):
    return sum(marks)/len(marks)

def find_top_student(data):
    return max(data,key=data.get)

def classify_students(mark):
    if mark>=90:
        return "Excellent"
    elif mark>=80:
        return "Very Good"
    elif mark>=70:
        return "Good"
    elif mark>=60:
        return "Pass"
    elif mark>0 and mark<59:
        return "Fail" 
    else:
        return "Invalid mark"

average=calculate_average(list(students.values()))
top_student=find_top_student(students)

print("----Student performance Report----")
for name,mark in students.items():
    print(name,mark,classify_students(mark))

print("---------")
print("Average:",average)
print("Top Student: ",top_student)
print("Highest Mark: ",students[top_student])