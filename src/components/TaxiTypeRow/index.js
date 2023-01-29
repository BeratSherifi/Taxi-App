import React from "react";
import { View, Image, Text, Pressable } from "react-native";
import styles from "./styles";
import Ionicons from "react-native-vector-icons/Ionicons"

import typesData from "../../assets/data/types";
import types from "../../assets/data/types";

const TaxiTypeRow = (props) => {

    const {type} = props;

    
   const getimage = () => {
        if(type.type === 'TaxiX'){
            return require('../../assets/images/UberX.jpeg'); 
        }
        if(type.type === 'Comfort'){
            return require('../../assets/images/Comfort.jpeg'); 
        }
        return require('../../assets/images/UberXL.jpeg'); 
    }

    const chose = () =>{
        console.warn('Taxi is coming, please wait');
    }
    

    return (
        <View style={styles.container}>
            {/*  Image  */}
            <Image
             style={styles.image}
            source={getimage()} />

            <View style={styles.middleContainer}>
                <Text style={styles.type}>
                    {type.type}{' '}
                    <Ionicons name={'person'} size={16} />
                    3
                </Text>
                <Text style={styles.time}>
                    7:04PM drop off
                </Text>
                <Pressable onPress= {chose} style={{
                backgroundColor:'#fdc903',
                padding: 3,
                margin: 3,
                alignItems:'center',
            }}>
                 <Text style={{
                       color:'black',
                       fontWeight:'bold',
                }}>
                    Confirm 
                </Text>
            </Pressable>

            </View>

            <View style={styles.rightContainer}>
                <Ionicons name={'pricetag'} size={18} color={'#42d742'} />
                <Text style={styles.price}>
                    est. ${type.price}
                </Text>
            </View>

 
        </View>
    );
};

export default TaxiTypeRow;