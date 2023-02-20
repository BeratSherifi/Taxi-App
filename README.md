# TaxiTaxi - App

Welcome to our Taxi Application! This cross-platform mobile application, built with React Native, allows users to easily login, call a taxi, and view the roadmap from their current location to their desired destination. Users can also choose from a variety of taxi types, including Standard, Comfort, and TaxiX (Lux).

# Features
- Secure user login for account creation and management
- Option to select the type of taxi desired (Standard, Comfort, TaxiX )
- Easy to call a taxi with the click of a button
- Real-time roadmap to guide users to their destination
- Cross-platform application, available for both Android and iOS devices

# User Interface and Design

&emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220132953-faa2df51-9ac4-402f-9c1c-4fdaae609dd4.png)  &emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220133588-8153f496-730f-47ac-9170-fecee7f33930.png)  &emsp; &emsp;     ![image](https://user-images.githubusercontent.com/117351117/220133882-c41f50b4-66e4-4d3c-8a10-4d46828abe41.png)

&emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220133773-b3bec254-6407-4d5b-8a90-0e4954a27d5a.png)  &emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220134029-0c5cb8f7-ecbf-4703-9fa9-45676baed83e.png)  &emsp; &emsp;     ![image](https://user-images.githubusercontent.com/117351117/220134130-cf634b0a-42bc-42a6-972f-98902ff9c1bc.png)

&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220135833-c2478d13-7072-482f-9757-cff0af89d6ca.png) &emsp; &emsp; ![image](https://user-images.githubusercontent.com/117351117/220135960-931eb5bc-b30d-4c67-a425-9cabfe207687.png)




# Tech Stack
This project was built using the following technologies:
- React Native
- Firebase

# Installation and Setup
- Clone the repository
- Install dependencies by running npm install. <br/>
  Dependencies that need to be installed, you can also check this in "package.json": <br/><br/>
  "dependencies": { <br/>
    "@react-native-community/geolocation": "^3.0.5",<br/>
    "@react-native-community/netinfo": "^9.3.7",<br/>
    "@react-native-picker/picker": "^2.4.8",<br/>
    "@react-navigation/drawer": "^6.5.7", <br/>
    "@react-navigation/native": "^6.1.2", <br/>
    "@react-navigation/native-stack": "^6.9.8", <br/>
    "@react-navigation/stack": "^6.3.11", <br/>
    "firebase": "^9.6.11", <br/>
    "react": "18.2.0", <br/>
    "react-native": "0.71.1", <br/>
    "react-native-gesture-handler": "^2.9.0", <br/> 
    "react-native-google-places-autocomplete": "^2.5.1",<br/> 
    "react-native-maps": "^1.3.2",<br/> 
    "react-native-maps-directions": "^1.9.0", <br/>
    "react-native-reanimated": "^2.14.4", <br/>
    "react-native-safe-area-context": "^4.5.0", <br/>
    "react-native-screens": "^3.19.0",<br/>
    "react-native-vector-icons": "^9.2.0" <br/>
  },
  
  You also need to install:<br/>
  firebase@9.6.11 <br/>

  
 - Some changes in files <br/><br/>
    in config.js file:  you should add your firebase api-key, also credentials must be changed, you must add your informations  <br/>
  
    Likewise, you have to add the google api keys (not firebase), in the following files: <br/>
    android\app\src\main\AndroidManifest.xml<br/>
    src\components\RouteMap\index.js<br/>
    src\screens\DestinationSearch\index.js<br/>
    
  
  
- Run the application on an emulator or physical device using npx react-native run-android or npx react-native run-ios
- Create an account and log in to begin using the application
