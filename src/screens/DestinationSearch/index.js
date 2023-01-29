import React, { useEffect, useState } from 'react';
import { View, Text, TextInput, SafeAreaView } from 'react-native';
import styles from './styles';
import {GooglePlacesAutocomplete} from 'react-native-google-places-autocomplete';
import { GooglePlaceData } from 'react-native-google-places-autocomplete';
import { GooglePlaceDetail } from 'react-native-google-places-autocomplete';
import PlaceRow from './PlaceRow';
import { useNavigation } from '@react-navigation/native';

const homePlace = {
  description: 'Home',
  geometry: { location: { lat: 41.986758527556155,  lng: 20.96124468236389 } },
};
const workPlace = {
  description: 'Work',
  geometry: { location: { lat: 41.986718653956935,  lng: 20.960665324731412, } },
};

const DestinationSearch = (props) => {
    
    const [originPlace, setOriginPlace] = useState ('');
    const [destinationPlace, setDestinationPlace] = useState (''); 

    const navigation = useNavigation();
    const checkNavigation = () => {
     // console.warn(data= 'useEffect is called');
      if(originPlace && destinationPlace) {
        navigation.navigate('SearchResults',{
          originPlace,
          destinationPlace
        })
      }
    }


    useEffect( () => {
        checkNavigation();
    }, [originPlace,destinationPlace])

  return (
    <SafeAreaView>
    <View style={styles.container}> 
    
    <GooglePlacesAutocomplete
      placeholder='Where from?'
      onPress={(data , details  = null ) => {
        setOriginPlace( {data, details});
    
      }}
      enablePoweredByContainer={false}
      suppressDefaultStyles
      currentLocation={true}
      currentLocationLabel='Current location'
      styles={{
        textInput:styles.textInput,
        container: styles.autocompleteContainer,
        listView: styles.listView,
        separator: styles.separator,
      }}

      fetchDetails
      query={{
        key: 'Api-key',
        language: 'en',
      }}
      renderRow={(data ) => <PlaceRow data={data}/>}
      renderDescription={(data) => data.description || data.vicinity}
      predefinedPlaces={[homePlace, workPlace]}
  />
  
   
<GooglePlacesAutocomplete
      placeholder='Where to?'
      onPress={(data , details = null ) => {
        setDestinationPlace( {data, details});
        //console.log(data, details);
      }}
      enablePoweredByContainer={false}
      suppressDefaultStyles
      styles={{
        textInput:styles.textInput,
        container: {
          ...styles.autocompleteContainer,
          top: 55,
        },
        separator:styles.separator,
      }}

      fetchDetails
      query={{
        key: 'Api-key',
        language: 'en',
      }}
      renderRow={(data  ) => <PlaceRow data={data}/>}
  />

  {/* circle near origin input */} 
  <View style={styles.circle} />
   
  {/* line between dots */}
  <View style={styles.line} />
  {/* square near destination input */}
  <View style={styles.square} />

    </View>
    </SafeAreaView>
  );
}

export default DestinationSearch;
