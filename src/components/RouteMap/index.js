import React from 'react';
import { View, Text, Image } from 'react-native';
import MapView, { PROVIDER_GOOGLE } from 'react-native-maps';
import { Marker } from 'react-native-maps';
import { FlatList } from 'react-native';
import cars from '../../assets/data/cars';
import MapViewDirections from 'react-native-maps-directions';


const GOOGLE_MAPS_APIKEY = 'api-key';


const RouteMap = ({origin, destination}) => {

  const originLoc = {
    latitude: origin.details.geometry.location.lat,
    longitude: origin.details.geometry.location.lng,
  };

  const destinationLoc = {
    latitude: destination.details.geometry.location.lat,
    longitude: destination.details.geometry.location.lng,
  };
  
  return (
           
    <MapView
        style={{width:'100%', height:'100%'}}
        provider={PROVIDER_GOOGLE}
        showsUserLocation={true}
        initialRegion={{
        latitude: 41.986758527556155, 
        longitude: 20.96124468236389, 
        latitudeDelta: 0.2922,
        longitudeDelta: 0.0121,
      
    }}>

      <MapViewDirections
        origin={originLoc}
        destination={destinationLoc}
        apikey={GOOGLE_MAPS_APIKEY}
        strokeWidth={5}
        strokeColor="black"
      />

      <Marker
        coordinate={originLoc}
        title={'Origin'}
      
      />

      <Marker
        coordinate={destinationLoc}
        title={'Destination'}
      />
        
    </MapView>
      
    );
  };
      

export default RouteMap;
