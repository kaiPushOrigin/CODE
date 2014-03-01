def removeUnic(a):
	return ''.join([i if ord(i) < 128 else '' for i in a])
def main():
        f = open("data.csv")
	a = f.read()
	f.close()
	f = open("FilteredData.csv",'w')
	f.write(removeUnic(a))
	f.close()
if __name__=="__main__":
	main()
 
