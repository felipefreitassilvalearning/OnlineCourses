/* eslint-disable prettier/prettier */
/* eslint-disable react-hooks/exhaustive-deps */
/* eslint-disable prettier/prettier */
import React, {useEffect} from 'react';
import {ActivityIndicator, View, Text, StyleSheet, StatusBar} from 'react-native';
import Colors from '../../styles/Colors';

import {isInitialized} from '../../services/Welcome';

const Loading = ({navigation}) => {

    useEffect(() =>{
        async function makeRedirect() {
            (await isInitialized())
            ? navigation.navigate('Main')
            : navigation.navigate('Welcome');
        }
        makeRedirect();

    }, []);
  return (
    <View style={styles.container}>
        <StatusBar barStyle="light-content" backgroundColor={Colors.background}/>
      <ActivityIndicator color={Colors.turquese} size={60}/>
    </View>
  );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: Colors.background,
    },

});

export default Loading;
