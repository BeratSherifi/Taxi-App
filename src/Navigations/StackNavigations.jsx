
import * as React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createDrawerNavigator } from '@react-navigation/drawer';
import { SafeAreaProvider } from 'react-native-safe-area-context';
import HomeScreen from '../screens/HomeScreen';
import { StatusBar } from 'react-native/Libraries/Components/StatusBar/StatusBar';
import DestinationSearch from '../screens/DestinationSearch';
import SearchResults from '../screens/SearchResults';
import HomeNavigator from './Home';
import { View, Text } from 'react-native';
import CustomDrawer from './CustomDrawer';
import Dashboard from '../../source/Dashboard';

const Drawer = createDrawerNavigator();

const DummyScreen = (props) => (
  <View style={{flex: 1,justifyContent: 'center', alignItems: 'center'}}>
      <Text>{props.name}</Text>        
  </View>
)

function App() { 
  return (
    <SafeAreaProvider>   
      <Drawer.Navigator  drawerContent={
        (props) => (<CustomDrawer {... props} />) }  
        screenOptions={
        {headerShown: false,}
        
        }>
        <Drawer.Screen  name="Home" component={HomeNavigator} />
        
        <Drawer.Screen name="Your Trips">
           {() => <DummyScreen name={"Your Trips"} />}
        </Drawer.Screen>
        
        <Drawer.Screen name="Help">
        {() => <DummyScreen name={"Help"} />}
        </Drawer.Screen>
        
        <Drawer.Screen name="Settings" component={Dashboard} />
      
      </Drawer.Navigator>
    </SafeAreaProvider> 
        
  )
};

export default App;