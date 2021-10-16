/* eslint-disable prettier/prettier */
import React, {useState} from 'react';
// eslint-disable-next-line no-unused-vars
import {StatusBar, View, TouchableOpacity, Text, StyleSheet} from 'react-native';

import LinearGradient from 'react-native-linear-gradient';
import Icon from 'react-native-vector-icons/MaterialIcons';
import Currency from '../../components/Core/Currency';
import BalancePanelLabel from './BalancePanelLabel';
import BalancePanelChart from './BalancePanelChart';

import useBalance from '../../hooks/useBalance';

import Colors from '../../styles/Colors';

const BalancePanel = ({onNewEntryPress}) => {
  const [balance] = useBalance();

  return (
    <View style={styles.container}>
      <StatusBar barStyle="light-content" backgroundColor={Colors.violetDark}/>
      <LinearGradient
        colors={[Colors.violetDark, Colors.turquese]}
        style={styles.panel}>
        <BalancePanelLabel currentBalance={balance} />
      </LinearGradient>
      <TouchableOpacity style={styles.button} onPress={onNewEntryPress}>
        <Icon name="add" size={30} color={Colors.white} />
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    marginBottom: -15,
  },
  panel: {
    marginBottom: 5,
  },
  button: {
    backgroundColor: Colors.green,
    borderRadius: 150,
    alignSelf: 'flex-end',
    alignItems: 'center',
    justifyContent: 'center',
    width: 50,
    height: 50,
    shadowColor: Colors.black,
    elevation: 5,
    marginTop: -35,
    marginRight: 10,
    zIndex: 1,
  },
});

export default BalancePanel;
