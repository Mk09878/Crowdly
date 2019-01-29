from joblib import dump, load
import numpy as np
import sys
m = int(sys.argv[1])
d = int(sys.argv[2])
h = int(sys.argv[3])
c = int(sys.argv[4])

if c == 1:
    regressor = load('xgb1.joblib')

elif c == 2:
    regressor = load('xgb2.joblib')

elif c == 3:
    regressor = load('xgb3.joblib')
    
sol = []
a = np.arange(7,24)
for i in range(17):
    sol.append(int(np.asscalar(regressor.predict(np.array([[m,d,a[i]]])))))
print(sol)
#print(int(np.asscalar(regressor.predict(np.array([[m,d,h]])))))
#print(12)

"""file = open("result.txt","w+")
file.write(str(regressor.predict(np.array([[m,d,h]]))))
file.close()"""



