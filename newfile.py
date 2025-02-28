def get_month_name(month):
    months = ["January", "February", "March", "April", "May", "June",
           
                 "July", "August", "September", "October", "November", "December"]
    
    if 1 <= month <= 12:
        return months[month - 1]
    else:
        return "Invalid month"

month = int(input("กรอกเลขเดือน (1-12): "))
print("เดือนคือ:", get_month_name(month))