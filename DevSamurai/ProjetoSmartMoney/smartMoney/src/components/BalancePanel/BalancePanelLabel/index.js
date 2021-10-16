import React from 'react';
import {View, Text, StyleSheet} from 'react-native';
import Colors from '../../../styles/Colors';
import Currency from '../../Core/Currency';

const BalancePanelLabel = ({currentBalance}) => {
  return (
    <View style={styles.container}>
      <Text style={styles.label}>Saldo atual</Text>
      <Text style={styles.value}>
        <Currency value={currentBalance} />
      </Text>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    alignItems: 'center',
    zIndex: 1,
    marginTop: 20,
  },
  label: {
    fontSize: 14,
    color: Colors.white,
    marginBottom: 10,
  },
  value: {
    fontSize: 36,
    color: Colors.white,
    marginBottom: 20,
  },
});

export default BalancePanelLabel;
