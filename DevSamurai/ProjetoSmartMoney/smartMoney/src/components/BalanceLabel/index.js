import React from 'react';
import {View, Text, StyleSheet, StatusBar} from 'react-native';

import LinearGradient from 'react-native-linear-gradient';

import useBalance from '../../hooks/useBalance';

import Currency from '../Core/Currency';

import Colors from '../../styles/Colors';

const BalanceLabel = () => {
  const [balance] = useBalance();

  return (
    <View style={styles.container}>
      <StatusBar barStyle="light-content" backgroundColor={Colors.background} />
      <Text style={styles.label}>Saldo Atual</Text>

      <LinearGradient
        style={styles.panel}
        colors={[Colors.violetDark, Colors.turquese]}>
        <Text style={styles.value}>
          <Currency value={balance} />
        </Text>
      </LinearGradient>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    alignItems: 'center',
    padding: 20,
  },
  label: {
    fontSize: 12,
    color: Colors.white,
  },
  panel: {
    borderRadius: 10,
    minWidth: 200,
    paddingVertical: 10,
    paddingHorizontal: 30,
    marginVertical: 10,
  },
  value: {
    fontSize: 28,
    color: Colors.white,
    textAlign: 'center',
  },
});

export default BalanceLabel;
