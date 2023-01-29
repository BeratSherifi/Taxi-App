import React from "react";
import { View, Text, Pressable } from "react-native";
import TaxiTypeRow from "../TaxiTypeRow";
import styles from "./styles";

import typesData from "../../assets/data/types";
import types from "../../assets/data/types";

const TaxiTypes= (props) => {
    const confirm = () =>{
        console.warn('confirm');
    };
    return(
        <View>
            {typesData.map(type => 
            <TaxiTypeRow  type={type} key={type.id} />            
            )}
          
            

        </View>
    );
};

export default TaxiTypes;