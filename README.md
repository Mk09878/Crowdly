# Crowdly

### Project made by:
1. Mihir Kelkar
2. Sumedh Sen
### Title : Crowdly - A predictive crowd estimation tool for Central Railway

### Abstract :
Every person travelling by trains faces the issue of excessive crowd. The
population explosion in recent times has aggravated this problem. This can be resolved by the
introduction of Machine Learning (ML) in the existing technologies. Our system titled “Crowdly”
integrates ML algorithms and PHP scripts to provide a solution to this issue.

### Objective : 
To predict the number of people at a particular station between a given duration.

### Methodology : 
The user is provided with an interface consisting of the following inputs:
 1. Station
 2. Month
 3. Date
 4. Time Interval
Once the user fills all the fields with the desired inputs and presses the submit button,
the PHP script provides the input to the Python file. The Python file having a joblib file which
consists of the trained model, uses this file and predicts the number of people for the entire
day. It returns all these predictions to the PHP script. The PHP file filters this data and
generates a graph with the help of Javascript. All these values are then plotted on the graph as
the predictions for the entire day. It also provides a single desired prediction requested by the
user in a separate space.

### Model Selection : Initially, two sets of models were selected namely: Regression models and
Neural Networks. Neural Networks proved ineffective for predicting the number of people.
However, two regression models provided satisfactory results. The two models were : Random
Forest Regression and XGBoost. Out of these models, XGBoost proved to be more effective
with lower RAM consumption, less execution time and a better accuracy.
## Accuracy :
Measured using 10-fold cross validation.
Neural Networks : 40%
Support Vector Regression : 56%
Decision Tree Regression : 74%
Random Forest Regression : 88%
XGBoost : 90%
Finalized Model : XGBoost

### Technologies Used :
Front-End : HTML, CSS3, Hybrid combination of Bootstrap and Material Design Lite,
Javascript
Back-End : PHP, Python
Databases : MySQL, Microsoft Excel
