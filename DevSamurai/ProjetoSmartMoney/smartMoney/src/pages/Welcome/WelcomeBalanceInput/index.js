import React from 'react';
import {View, Text, StyleSheet} from 'react-native';

import InputMoney from '../../../components/Core/InputMoney';

import Colors from '../../../styles/Colors';

const WelcomeBalanceInput = ({value, onChangeValue}) => {
  return (
    <View>
      <Text style={styles.label}>Informe seu saldo</Text>
      <InputMoney
        value={value}
        startWithDebit={false}
        onChangeValue={onChangeValue}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  label: {
    color: Colors.white,
    fontSize: 28,
    textAlign: 'center',
  },
});

export default WelcomeBalanceInput;
