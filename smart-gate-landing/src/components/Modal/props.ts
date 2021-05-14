export type Props = {
  readonly title: string;
  readonly imageName: string;
  readonly subTitle?: string;
  readonly descriptions: readonly { readonly label: string; readonly content: string }[];
  readonly buttonLabel?: string;
  readonly onCLose?: () => void;
};
