
import * as React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { SafeAreaProvider } from 'react-native-safe-area-context';
import HomeScreen from '../screens/HomeScreen';
import { StatusBar } from 'react-native/Libraries/Components/StatusBar/StatusBar';
import DestinationSearch from '../screens/DestinationSearch';
import SearchResults from '../screens/SearchResults';
//import {useEffect} from 'react'

const RootStack = createNativeStackNavigator(); 

function HomeNavigator() { 
  return (
        <SafeAreaProvider>
          <RootStack.Navigator 
          screenOptions={{
            headerShown: false,
          }}>          
              <RootStack.Screen name="Home" component={HomeScreen} />
              <RootStack.Screen name="DestinationSearch" component={DestinationSearch} />
              <RootStack.Screen name="SearchResults" component={SearchResults} />
          </RootStack.Navigator> 
          </SafeAreaProvider>  
       
  )
};

export default HomeNavigator;