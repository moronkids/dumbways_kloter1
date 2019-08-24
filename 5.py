string = " "
bar = 1

x = str(input("Masukan kata: "))
pjg = len(x)
kosongan = []
kosongan.append(x)
pisah = list(x)

while bar <= pjg:
    kol = bar
    while kol > 0:
        if kol == 1:
            string = string + pisah[bar-1]

        else:
            string = string + "  "
        kol = kol - 1
    string = string + "\n"
    bar = bar + 1
print(string)
print(pisah)
