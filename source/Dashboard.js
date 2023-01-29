import {Text , StyleSheet, SafeAreaView, TouchableOpacity} from 'react-native'
import React, {useState, useEffect} from 'react'
import {firebase} from '../config'




const Dashboard = () => {
    const [name, setName] = useState('')



    const changePassword = () => {
        firebase.auth().sendPasswordResetEmail(firebase.auth().currentUser.email)
        .then(() => {
            alert("Password reset email sent")
        }).catch((error) => {
            alert(error)
        })
    }


    useEffect(() => {
        firebase.firestore().collection('users')
        .doc(firebase.auth().currentUser.uid).get()
        .then((snapshot) => {
            if(snapshot.exists){
              setName(snapshot.data())
        }
        else {
            console.log('User does not exist')
        }   
    })
, []})

    return(
        <SafeAreaView style ={styles.container}>
            <Text style={{fontSize:20, fontWeight:'bold', paddingTop: 100}}>
                Hello,  
            </Text>

            <TouchableOpacity
             onPress={() => {firebase.auth().signOut()
            }}
             style={styles.button}
            >
                <Text style={{fontSize:22, fontWeight:'bold'}}>
                    Sign Out
                </Text>

            </TouchableOpacity>

            <TouchableOpacity
             onPress={() => {
               changePassword()
            }}
             style={styles.button}
            >
                <Text style={{fontSize:22, fontWeight:'bold'}}>
                    Change Password
                </Text>

            </TouchableOpacity>
        </SafeAreaView>
    )

}

export default Dashboard;

const styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        matginTop: 100,
    },
  
    button:{
        marginTop:50,
        height:70,
        width:250,
        backgroundColor:'#FDC903',
        alignItems:'center',
        justifyContent:'center',
        borderRadius:50,
        }
})