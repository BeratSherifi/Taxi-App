import 'react-native-gesture-handler'
import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import React, { useState, useEffect } from "react";
import { firebase } from './config';

import Login from "./source/Login";
import Registration from "./source/Registration";
import Dashboard from "./source/Dashboard";
import Header from "./compo/Header";
import  Navigations  from './src/Navigations/StackNavigations'
import Geolocation from '@react-native-community/geolocation';
import { PermissionsAndroid, Platform } from 'react-native';

navigator.geolocation = require('@react-native-community/geolocation');

const Stack = createNativeStackNavigator();

function App() {
    const [initializing, setinitializing] = useState(true);
    const [user, setUser] = useState();


    function onAuthStateChanged(user) {
        setUser(user);
        if (initializing) setinitializing(false);
    }

    useEffect(() => {
        const subscriber = firebase.auth().onAuthStateChanged(onAuthStateChanged);
        return subscriber;
    }, [])

    if (initializing) return null;

    if (!user) {
        return (
            <Stack.Navigator>
                <Stack.Screen
                    
                    name="Login"
                    component={Login}
                    options={{
                      headerShown: false,
                       
                    }}
                />
                <Stack.Screen
                    name="Registration"
                    component={Registration}
                    options={{
                        headerShown: false,
                    }}
                />
            </Stack.Navigator>
        );
    }

    return (
        <Stack.Navigator>
            <Stack.Screen
                name="Navigation"
                component={Navigations}
                options={{
                  headerShown: false,
                }}
            />

        </Stack.Navigator>
    )

}

export default () => {
    return (
        <NavigationContainer>
            <Stack.Navigator
             headerMode="none"
              screenOptions={{
                 headerShown: false,
             }}>   
                <Stack.Screen name="App" component={App} />
            </Stack.Navigator>
        </NavigationContainer>
    )
}