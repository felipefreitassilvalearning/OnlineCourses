import React from 'react';
import {View, StyleSheet} from 'react-native';

import {BarChart} from 'react-native-svg-charts';

import useBalanceSumByDate from '../../../hooks/useBalanceSumByDate';

const BalancePanelChart = () => {
  const [balanceSum] = useBalanceSumByDate();

  return (
    <View style={styles.container}>
      <BarChart
        style={styles.chart}
        data={balanceSum}
        svg={{
          fill: 'rgba(26,188,156, 0.9)',
          stroke: 'rgba(0,0,0,.1)',
          strokeWidth: 1,
        }}
        contentInset={{top: 0, bottom: 0}}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    marginTop: 50,
    marginBottom: -5,
    marginHorizontal: -6,
  },
  chart: {
    height: 80,
  },
});

export default BalancePanelChart;
