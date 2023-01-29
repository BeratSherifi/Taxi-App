import React from "react";
import { View ,Dimensions} from "react-native";
import HomeMap from "../../components/HomeMap";
import HomeSearch from "../../components/HomeSearch";
import styles from "../../components/HomeSearch/styles";


const HomeScreen = (props) => {
    return (
        <View>
             <View style={{height: Dimensions.get('window').height - 390}}>
                <HomeMap />
            </View>
           

            {/*Buttom Comp*/}
            <HomeSearch />
        </View>
    );
};

export default HomeScreen;