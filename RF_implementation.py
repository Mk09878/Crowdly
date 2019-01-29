# Importing the libraries
import numpy as np
import pandas as pd
from joblib import dump, load

# Importing the dataset
dataset = pd.read_csv('A.csv')
X1 = dataset.iloc[:, 0:3].values
y1 = dataset.iloc[:, 3].values
dataset = pd.read_csv('B.csv')
X2 = dataset.iloc[:, 0:3].values
y2 = dataset.iloc[:, 3].values
dataset = pd.read_csv('C.csv')
X3 = dataset.iloc[:, 0:3].values
y3 = dataset.iloc[:, 3].values

# Splitting the dataset into the Training set and Test set
from sklearn.model_selection import train_test_split
X_train1, X_test1, y_train1, y_test1 = train_test_split(X1, y1, test_size = 0.25, random_state = 0)
from sklearn.model_selection import train_test_split
X_train2, X_test2, y_train2, y_test2 = train_test_split(X2, y2, test_size = 0.25, random_state = 0)
from sklearn.model_selection import train_test_split
X_train3, X_test3, y_train3, y_test3 = train_test_split(X3, y3, test_size = 0.25, random_state = 0)


# Fitting Random Forest Regression to the dataset
"""from sklearn.ensemble import RandomForestRegressor   
regressor = RandomForestRegressor(n_estimators = 600, random_state = 0)
regressor.fit(X_train, y_train)"""

# Fitting XGBoost Regression to the dataset
from xgboost import XGBRegressor
regressor = XGBRegressor()
regressor.fit(X_train1, y_train1)
#print(regressor.predict(np.array([[3,29,10]])))
dump(regressor, 'xgb1.joblib')
regressor.fit(X_train2, y_train2)
#print(regressor.predict(np.array([[3,29,10]])))
dump(regressor, 'xgb2.joblib')
regressor.fit(X_train3, y_train3)
#print(regressor.predict(np.array([[3,29,10]])))
dump(regressor, 'xgb3.joblib')


