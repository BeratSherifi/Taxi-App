import {View, Text, TouchableOpacity, TextInput , StyleSheet, Image} from 'react-native'
import React, {useState} from 'react'
import {useNavigation} from '@react-navigation/native'
import {firebase} from '../config'


const Login = () => {
    const navigation = useNavigation()
    const [email, setEmail] = useState('')
    const [password, setPassword] = useState('')

    

        loginUser = async (email, password) => {
            try {
                await firebase.auth().signInWithEmailAndPassword(email,password)
            } catch(error){
                alert(error.message)
            }
    }

    const forgetPassword = () => {
        firebase.auth().sendPasswordResetEmail(email)
        .then(() => {
            alert("Password reset email sent")
        }).catch((error) => {
            alert(error)
        })
    }

    return(
        <View style={styless.container} >

            <Image source={require('../src/assets/images/logo1.png')} style={{ width: 390,
    height: 200,}}></Image>
            
            <Text style={{fontWeight: 'bold', fontSize:26 , paddingTop: 20,}}>
                Login
            </Text>
            <View style={{marginTop:40}}>
                <TextInput
                    style={styless.textInput}
                    placeholder="Email"
                    onChangeText={(email) => setEmail(email)}
                    autoCapitalize="none"
                    autoCorrect={false}
                />
                <TextInput
                    style={styless.textInput}
                    placeholder="Password"
                    onChangeText={(password) => setPassword(password)}
                    autoCapitalize="none"
                    autoCorrect={false}
                    secureTextEntry={true}
                />
            </View>
            <TouchableOpacity
                onPress={() => loginUser(email, password)}
                style={styless.button}
            >
                <Text style={{fontWeight:'bold',fontSize:22}}>Login</Text>
            </TouchableOpacity>
            <TouchableOpacity
                onPress={() => navigation.navigate('Registration')}
                style={{marginTop:20}}
            >
                <Text style={{fontWeight:'bold',fontSize:16}}>
                    Don't have an account? Register Now
                </Text>
            </TouchableOpacity>

            <TouchableOpacity
                onPress={() => {forgetPassword()}}
                style={{marginTop:20}}
            >
                <Text style={{fontWeight:'bold',fontSize:16}}>
                    Forget Password?
                </Text>
            </TouchableOpacity>

            </View>
    )
  
}

export default Login;

const styless = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        marginTop: 80,
    },
    textInput: {
        paddingTop: 20,
        paddingBottom: 10,
        width: 400,
        fontSize:20,
        borderBottomWidth: 1,
        borderBottomColor:'#000',
        marginBottom: 10,
        textAlign:'center'
    },
    button:{
        color:'black',
        fontWeight: 'bold',
        marginTop:50,
        height:70,
        width:250,
        backgroundColor:'#FDC903',
        alignItems:'center',
        justifyContent:'center',
        borderRadius:50,
        }
})