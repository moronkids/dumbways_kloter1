data_brs = int(input('masukan baris: '))
data_klm = int(input('masukan kolom: '))

i = 0
string = ""
awal = 2
t = 0
jumlah =(data_brs * data_klm)
pengenal = 0
pengenalkol =0
while i <= data_brs-1:
    kol = data_klm


    while kol > 0:
        while awal <= 100000000:
            if pengenalkol == data_brs:
                break
            elif awal == 2 or awal == 3 or awal == 5 or awal == 7:
                string = string + str(awal) + ","
                awal = awal+1
                pengenal = pengenal + 1
                if pengenal % data_klm == 0:
                    pengenalkol = pengenalkol + 1
                    string = string + ("\n")

            elif awal % 2 == 0 or awal % 3 == 0 or awal % 5 == 0 or awal % 7 == 0:
                awal = awal + 1
            else:
                string = string + str(awal) + ","
                awal = awal + 1
                pengenal = pengenal + 1
                if pengenal % data_klm == 0:
                    pengenalkol = pengenalkol + 1
                    string = string + ("\n")

        kol = kol -1
        # if awal == 2:
        #     awal = awal + 1
        # elif awal > 2:
        #     awal = awal + 2
    # string = string + "\n"
    i = i + 1
print(string)
