import React from 'react';
import { View, Text, Image } from 'react-native';
import MapView, { PROVIDER_GOOGLE } from 'react-native-maps';
import { Marker } from 'react-native-maps';
import { FlatList } from 'react-native';
import cars from '../../assets/data/cars';
import {GooglePlacesAutocomplete} from 'react-native-google-places-autocomplete';


const HomeMap = (props) => {

  const getimage = (type) => {
    if(type === 'TaxiX'){
        return require('../../assets/images/top-UberX.png'); 
    }
    if(type === 'Comfort'){
        return require('../../assets/images/top-Comfort.png'); 
    }
    return require('../../assets/images/top-UberXL.png'); 
};
  
  return (
    
       
    <MapView
        style={{width:'100%', height:'100%'}}
        provider={PROVIDER_GOOGLE}
        showsUserLocation={true}
        initialRegion={{
        latitude:41.98671067911168, 
        longitude: 20.960193256393662 ,
        latitudeDelta: 0.2922,
        longitudeDelta: 0.0121,
      
      }}>

        {cars.map((car) => (
            <Marker
            key={car.id}
            coordinate={{ latitude : car.latitude, longitude : car.longitude }}
            >
            <Image
              style={{
                 width: 50,
                 height: 50, 
                 resizeMode: 'contain',
                 transform: [{
                  rotate: `${car.heading}deg`,
                }]   
              }}
              source={getimage(car.type)}/>
          </Marker>
        ))}

      
      </MapView>
      
    );
  };


      

export default HomeMap;
