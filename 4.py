key = ['out', 'stand', 'king', 'and']
# word = "outstanding"
word = str(input("masukan kata: "))

pecah = list(word)
pjg_pecah = len(pecah)
loop = len(key)
i =0
z =0
while i <= loop-1:
    if key[i] in word:
        print(key[i]+ " TRUE")
    else:
        print(key[i]+ " FALSE")
    i = i+1
