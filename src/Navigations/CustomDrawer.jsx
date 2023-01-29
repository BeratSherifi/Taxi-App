import React from 'react';
import { Text, View , Pressable } from 'react-native';
import { DrawerContentScrollView, DrawerItemList } from '@react-navigation/drawer';

const CustomDrawer = (props) => {
    return (
        <DrawerContentScrollView {...props}>
            <View style={{backgroundColor:'#fdc903', padding: 15}}>

                {/* User Row */}
                <View style={{
                    flexDirection: 'row', 
                    alignItems: 'center',
                }}>
                    <View style={{
                        backgroundColor: '#cacaca', 
                        width: 50,
                        height: 50,
                        borderRadius: 25,
                        marginRight: 10
                    }}/>
                

                <View>
                    <Text style={{ color: 'black',fontSize: 24 }}>Profile</Text>
                    <Text style={{ color: 'black' }}>5.00 *</Text>
                </View>
            </View>   

                {/* Messages Row */}
                <View style={{
                    borderTopWidth: 1, 
                    borderBottomWidth: 1, 
                    borderTopColor: 'black',
                    borderBottomColor: 'black',
                    paddingVertical: 5,
                    marginVertical: 10
                    }}>
                <Pressable onPress={() => {console.warn('Messages')}}>
                    <Text style={{color:'black', paddingVertical: 5}}>Messages</Text>
                 </Pressable>
                </View>

                {/* Do more */}

                <Pressable onPress={() => {console.warn('Do more with your account')}}>
                    <Text style={{color:'black', paddingVertical: 5}}>Do more with your account</Text>
                </Pressable>
               

             

            </View>

          <DrawerItemList {...props} />  
        </DrawerContentScrollView>
    );
};

export default CustomDrawer;