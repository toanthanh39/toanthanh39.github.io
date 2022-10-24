import * as React from "react";
import axios from "axios";
import useLocalStorage from "use-local-storage";
import { dbapi } from "./config";

function withFetchData(Component, api = dbapi.getFeature, ...props) {
  return (props) => {
    const [dataLocal, setDataLocal] = useLocalStorage("data", []);
    const [data, setData] = React.useState(dataLocal);

    const GetData = React.useRef({});
    GetData.current = async () => {
      try {
        const response = await axios.get(api);
        setDataLocal(response.data);
      } catch (error) {
        console.log(error);
      }
    };
    React.useEffect(() => {
      GetData.current();
    }, []);

    return <Component value={dataLocal} {...props}></Component>;
  };
}
export default withFetchData;
